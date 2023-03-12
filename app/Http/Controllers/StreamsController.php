<?php

namespace App\Http\Controllers;

use Exception;
use Faker\Core\Number;
use SebastianBergmann\CodeCoverage\Util\Percentage;

class StreamsController extends Controller
{
    /**
     * The stream source.
     *
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function stream(){
        $headers = [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'text/event-stream',
        ];

        return response()->stream(function(){
            $this->totalInvoices();
            $this->count();
        }, 200, $headers);
    }

    public function count(){
        $number_batch = 50;
        $batches = 50;
        $number_invoices = $number_batch * $batches;
        
        for($x=1; $x<=$batches; $x++){
            for($i=0; $i<=$number_batch; $i++) {
                $number_invoice = ($x-1)*$number_batch + $i;
                $nota = json_encode(
                    [
                        'nota' => ($x-1)*$number_batch + $i,
                    ]
                );
                echo "event: notas\n", "data: $nota\n\n";
                ob_flush();
                flush();
                sleep(1);
            }

            $batch = json_encode(
                [
                    'lotes' => "Emitindo",
                ]
            );

            echo "event: batches\n", "data: $batch\n\n";
            ob_flush();
            flush();

            sleep(6);
            $batch = json_encode(
                [
                    'lotes' => ($x*$number_batch),
                    'porcentagem' => ($x*$number_batch)/$number_invoices*100
                ]
            );

            echo "event: batches\n", "data: $batch\n\n";
            ob_flush();
            flush();
        }
    }

    public function totalInvoices(){
        $number_batch = 50;
        $batches = 50;
        $batch = json_encode(
            [
                'notas' => $batches*$number_batch,
            ]
        );

        echo "event: a\n", "data: $batch\n\n";
        ob_flush();
        flush();
    }
}

