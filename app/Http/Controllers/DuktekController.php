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
        $userAgentData = $_SERVER['HTTP_USER_AGENT'];
        $operatingSystem     =   $this->getOS($userAgentData);
        $osBrowser    =   $this->getBrowser($userAgentData);
        //get ip, hostname, mac address
        $ipAddress = $this->get_client_ip();
        //get Mac Address
        $macAddress = $this->get_mac_address($ipAddress);
        //get host name
        $hostname = gethostbyaddr($ipAddress);

        $data=[
            'ip' => $ipAddress,
            'hostName' => $hostname,
            'macAddress' => $macAddress,
            'operatingSystem' => $operatingSystem,
            'userAgentData' => $userAgentData
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
    public function getOS($user_os) 
    { 
        $os_platform    =   "Unknown OS Platform";
        $os_array       =   array(
                                '/windows nt 10/i'     =>  'Windows 10',
                                '/windows nt 6.3/i'     =>  'Windows 8.1',
                                '/windows nt 6.2/i'     =>  'Windows 8',
                                '/windows nt 6.1/i'     =>  'Windows 7',
                                '/windows nt 6.0/i'     =>  'Windows Vista',
                                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                '/windows nt 5.1/i'     =>  'Windows XP',
                                '/windows xp/i'         =>  'Windows XP',
                                '/windows nt 5.0/i'     =>  'Windows 2000',
                                '/windows me/i'         =>  'Windows ME',
                                '/win98/i'              =>  'Windows 98',
                                '/win95/i'              =>  'Windows 95',
                                '/win16/i'              =>  'Windows 3.11',
                                '/macintosh|mac os x/i' =>  'Mac OS X',
                                '/mac_powerpc/i'        =>  'Mac OS 9',
                                '/linux/i'              =>  'Linux',
                                '/ubuntu/i'             =>  'Ubuntu',
                                '/iphone/i'             =>  'iPhone',
                                '/ipod/i'               =>  'iPod',
                                '/ipad/i'               =>  'iPad',
                                '/android/i'            =>  'Android',
                                '/blackberry/i'         =>  'BlackBerry',
                                '/webos/i'              =>  'Mobile'
                            );
        foreach ($os_array as $regex => $value) 
        { 
            if (preg_match($regex, $user_os)) 
            {
                $os_platform    =   $value;
            }
        }   
        return $os_platform;
    }

    public function getBrowser($user_os) 
    {
        $browser        =   "Unknown Browser";
        $browser_array  =   array(
                                '/msie/i'       =>  'Internet Explorer',
                                '/firefox/i'    =>  'Firefox',
                                '/safari/i'     =>  'Safari',
                                '/chrome/i'     =>  'Chrome',
                                '/edge/i'       =>  'Edge',
                                '/opera/i'      =>  'Opera',
                                '/netscape/i'   =>  'Netscape',
                                '/maxthon/i'    =>  'Maxthon',
                                '/konqueror/i'  =>  'Konqueror',
                                '/mobile/i'     =>  'Handheld Browser'
                            );
        foreach ($browser_array as $regex => $value) 
        { 
            if (preg_match($regex, $user_os)) 
            {
                $browser    =   $value;
            }
        }
        return $browser;
    }

}
