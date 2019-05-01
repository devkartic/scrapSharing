<?php

namespace App\Http\Controllers;
include 'simple_html_dom.php';

class ScrapController extends Controller
{
    public function getContent(){
        $curl = curl_init();
        $url = 'https://www.prothomalo.com/';
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($curl);
        curl_close($curl);

        $html = new \simple_html_dom();

        $html->load($response);

        $links = array();
        foreach ($html->find('a[class=link_overlay]') as $link){
            $links[] = $url.'/'.$link->href;
        }

        $data = array();
        $array = array();

        foreach ($links as $key => $lin){
            $detailHtml = file_get_contents($lin);
            $array['link'] = $lin;
            $array['post'] = $this->findStringByTagAttributes($detailHtml, 'h1');
            $array['detail'] = $this->findStringByTagAttributes($detailHtml, 'div[itemprop="articleBody"]');
            $data[] = $array;
            if($key==3) break;
        }
        return $data;
    }

/*  String should be tag, attributes
    DetailHtml should be Dom Html */

    public function findStringByTagAttributes($detailHtml, $string){
        $html = new \simple_html_dom();
        $html->load($detailHtml);
        $data = $html->find($string)[0]->plaintext;

        return $data;
    }
}
