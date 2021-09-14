<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {

            $route_path=$this->user()->roles[0]['route_path'];
            if($this->user()->roles[0]['name'] == "user"){
                return view('role.user.home'); 
            }else if($this->user()->roles[0]['name'] == "admin"){
              return view('role.admin.home');
              }else if($this->user()->roles[0]['name'] == "staff"){
                return view('role.staff.home');
                }else{
                return view('welcome');
              }
            return view($route_path);
          } catch (Exception $e) {

            return view('welcome');
          }
     
    }
   
    public function user()
    {
      return \Auth::user();
    }


    public function getAnalyticsSummary(Request $request){
    //  $from_date = date(“Y-m-d”, strtotime($request->get('from_date',”7 days ago”)));
    $from_date = date(“Y-m-d”,strtotime($request->get('from_date',$request->get('from_date','7 days ago')))) ;
      $to_date = date(“Y-m-d”,strtotime($request->get('to_date',$request->get('from_date','today')))) ;
      $gAData = $this->gASummary($from_date,$to_date) ;
      return $gAData;
      }
      //to get the summary of google analytics.
      private function gASummary($date_from,$date_to) {
      $service_account_email = 'jaineshpatel.dev@gmail.com';
      // Create and configure a new client object.
      $client = new \Google_Client();
      $client->setApplicationName('kaliba-template');
      $analytics = new \Google_Service_Analytics($client);
      $cred = new \Google_Auth_AssertionCredentials(
      $service_account_email,
      array(\Google_Service_Analytics::ANALYTICS_READONLY),
      '6512479840d99d4981b944783ccbb477dcd0409f'
      );
      $client->setAssertionCredentials($cred);
      if($client->getAuth()->isAccessTokenExpired()) {
      $client->getAuth()->refreshTokenWithAssertion($cred);
      }
      $optParams = [
      'dimensions' => 'ga:date',
      'sort'=>'-ga:date'
      ] ;
      // $results = $analytics->data_ga->get(
      // ‘ga:{View ID}',
      // $date_from,
      // $date_to,
      // ‘ga:sessions,ga:users,ga:pageviews,ga:bounceRate,ga:hits,ga:avgSessionDuration',
      // $optParams
      // );
      $rows = $results->getRows();
      $rows_re_align = [] ;
      foreach($rows as $key=>$row) {
      foreach($row as $k=>$d) {
      $rows_re_align[$k][$key] = $d ;
      }
      }
      $optParams = array(
      'dimensions' => 'rt:medium'
      );
      try {
      $results1 = $analytics->data_realtime->get(
      'ga:{View ID}',
      'rt:activeUsers',
      $optParams);
      // Success.
      } catch (apiServiceException $e) {
      // Handle API service exceptions.
      $error = $e->getMessage();
      }
      $active_users = $results1->totalsForAllResults ;
      return [
        'data'=> $rows_re_align ,
        'summary'=>$results->getTotalsForAllResults(),
        'active_users'=>$active_users['rt:activeUsers']
      ];
      
      }
}