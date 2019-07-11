<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
	public function index(){

		return Siswa::all();
	}

	public function get_curl($url){

		$curl=curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

		$data=curl_exec($curl);

		curl_close($curl);

		$data=json_decode($data,true);

		return $data;
	}

	public function display(){
		
		// **Cara Manual
		$data=$this->index();
		// bal.aefa();
		$orang=json_decode($data);

		// get Channel Title and Subscribers
		$url1="https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC1dI4tO13ApuSX0QeX8pHng&key=AIzaSyDJIWdwcVvjfPNVZJmQZyavJmPkdnyIOQ4";
		$result=$this->get_curl($url1);
		
		$result=$result{'items'}[0];

		// get Latest Video
		$url_latest_video="https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UC1dI4tO13ApuSX0QeX8pHng&order=date&key=AIzaSyDJIWdwcVvjfPNVZJmQZyavJmPkdnyIOQ4&maxResults=1";

		$latest=$this->get_curl($url_latest_video);
		$video_url=$latest{'items'}[0]{'id'}{'videoId'};

		// dd($result);

		return view('index',['orang'=>$orang],['data'=>$result]);
	}


	// create
	public function create(Request $request)
	{
		$siswa = new Siswa;
		$siswa->nama=$request->nama;
		$siswa->alamat=$request->alamat;
		$siswa->save();

		return "Data Disimpan";
	}
     //     
	// update
	public function update(Request $request, $id)
	{
		$nama=$request->nama;
		$alamat=$request->alamat;

		$siswa=Siswa::find($id);
		$siswa->nama = $nama;
		$siswa->alamat=$alamat;
		$siswa->save();

		return("Data berhasil diupdate");
	}

	// delete
	public function delete($id)
	{
		$siswa = Siswa::find($id);
		$siswa->delete();

		return("Data Berhasil Dihapus");
	}

	
}
