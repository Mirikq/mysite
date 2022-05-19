<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
	public function acMain () {
		$data = DB::table("posts")->where("name", "=", "mainpage")->first();
		$attachdata = DB::table("posts")->where("parent", "=", "3")->get(); 
		$attachdata2 = DB::table("posts")->where("parent", "=", "2")->get(); 
		//$attachdata = "SELECT * FROM posts WHERE parent = 3 LIMIT 3";
		return view("main", ["data" => $data,  "attachdata" => $attachdata, "attachdata2" => $attachdata2]);
	}
	
	public function amybio () {
		$data = DB::table("posts")->where("name", "mybio")->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view("mybio")->with(["data" => $data, "attachdata" => $attachdata]);
	}
	
	public function acNovosti () {
		$data = DB::table("posts")->where(["name" => "novosti"])->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view("novosti", ["data" => $data,  "attachdata" => $attachdata]);
	}
	
	public function acontacts () {
		$data = DB::table("posts")->where(["name" => "contacts"])->first();
		return view ("contacts")->with(["data" => $data]);
	}

	public function ameaning () {

		$data = DB::table("posts")->where("name", "aboutstreetart")->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view("meaning")->with(["data" => $data, "attachdata" => $attachdata]);
	}
	public function ekb () {

		$data = DB::table("posts")->where("name", "ekb")->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view("ekb")->with(["data" => $data, "attachdata" => $attachdata]);
	}
	public function peter () {
		$data = DB::table("posts")->where("name", "peter")->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view("peter")->with(["data" => $data, "attachdata" => $attachdata]);
	}

	public function acSubGoroda ($subgorod) {
		$data = DB::table("posts")->where("name", "=", $subgorod)->first();
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		return view ("goroda")->with(["data" => $data,  "attachdata" => $attachdata]);
	}	
	
}