<?php

namespace App\Http\Controllers;

use App\Duktek;
use Illuminate\Http\Request;

class DuktekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Duktek  $duktek
     * @return \Illuminate\Http\Response
     */
    public function show(Duktek $duktek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Duktek  $duktek
     * @return \Illuminate\Http\Response
     */
    public function edit(Duktek $duktek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Duktek  $duktek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duktek $duktek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Duktek  $duktek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duktek $duktek)
    {
        //
    }

    public function rekamip(Request $request)
    {
        //get ip, hostname, mac address
        $ipAddress = $this->get_client_ip();
        //get Mac Address
        $macAddress = $this->get_mac_address($ipAddress);
        //get host name
        $hostname = gethostbyaddr($ipAddress);

        $data=[
            'ip' => $ipAddress,
            'hostName' => $hostname,
            'macAddress' => $macAddress
        ];

        return view('duktek.ip', compact('data'));
    }

    public function storeip(Request $request)
    {
        dd($request->all());
    }

    public function get_client_ip()
     {
          $ipaddress = '';
          if (getenv('HTTP_CLIENT_IP'))
              $ipaddress = getenv('HTTP_CLIENT_IP');
          else if(getenv('HTTP_X_FORWARDED_FOR'))
              $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
          else if(getenv('HTTP_X_FORWARDED'))
              $ipaddress = getenv('HTTP_X_FORWARDED');
          else if(getenv('HTTP_FORWARDED_FOR'))
              $ipaddress = getenv('HTTP_FORWARDED_FOR');
          else if(getenv('HTTP_FORWARDED'))
              $ipaddress = getenv('HTTP_FORWARDED');
          else if(getenv('REMOTE_ADDR'))
              $ipaddress = getenv('REMOTE_ADDR');
          else
              $ipaddress = 'UNKNOWN';

          return $ipaddress;
     }

     public function get_mac_address($ipAddress)
     {
        $macAddr= "false";
        $arp=`arp -a $ipAddress`;
        $lines=explode("\n", $arp);
        foreach($lines as $line)
        {
           $cols=preg_split('/\s+/', trim($line));
           if ($cols[0]==$ipAddress)
           {
               $macAddr=$cols[1];
           }
        }
        return $macAddr;
     }
}
