<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\Video;
use App\Models\Number;
use App\Models\Text;
use App\Models\Partner;
use App\Models\Report;
use App\Models\ColaCorreo;
use App\Models\Mailer;
use App\Mail\SendMailing;
use Auth;
use Http;
use Session;
use App;

class Main extends Controller
{
    public function index(){
        $locale = App::getLocale();
        $blogs = Blog::orderBy('created_at', 'DESC')->where('lang', $locale)->take(3)->get();
        $sliders = Slider::orderBy('created_at', 'ASC')->where('estado', 1)->where('lang', $locale)->get();
        $numbers = Number::orderBy('created_at', 'DESC')->where('page', 'Home')->where('lang', $locale)->take(4)->get();
        return view('front.index', compact('blogs','sliders','numbers'));
    }
    public function index_what(){
        $locale = App::getLocale();
        $texts = Text::orderBy('created_at', 'DESC')->where('page', 'What')->where('lang', $locale)->take(4)->get();
        return view('front.what',compact('texts'));
    }
    public function index_where(){
        return view('front.where');
    }
    public function index_about_us(){
        $locale = App::getLocale();
        $partners = Partner::orderBy('created_at', 'ASC')->where('lang', $locale)->get();
        return view('front.about_us', compact('partners'));
    }
    public function index_join_us(){
        return view('front.join_us');
    }
    public function index_impact(){
        $locale = App::getLocale();
        $financials = Report::orderBy('created_at', 'DESC')->where('tipe', 'FI')->where('lang', $locale)->get();
        $anuals = Report::orderBy('created_at', 'DESC')->where('tipe', 'AN')->where('lang', $locale)->get();
        return view('front.impact', compact('financials','anuals'));
    }
    public function index_stories(){
        $locale = App::getLocale();
        $videos = Video::orderBy('created_at', 'DESC')->where('lang', $locale)->take(3)->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->where('lang', $locale)->take(3)->get();
        return view('front.stories', compact('videos','blogs'));
    }
    public function index_donate(){
        return view('front.donate');
    }
    public function index_donate_canada(){
        return view('front.donate_canada');
    }
    public function index_donate_usa(){
        return view('front.donate_usa');
    }
    public function index_resources(){
        $locale = App::getLocale();
        $blogs = Blog::orderBy('created_at', 'DESC')->where('lang', $locale)->take(3)->get();
        $videos = Video::orderBy('created_at', 'DESC')->where('lang', $locale)->take(3)->get();
        return view('front.resources',compact('blogs','videos'));
    }
    public function index_blog(){
        $locale = App::getLocale();
        $blogs = Blog::orderBy('created_at', 'DESC')->where('lang', $locale)->get();
        return view('front.blog',compact('blogs'));
    }
    public function index_our_offices(){
        return view('front.our_offices');
    }
    public function swap($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
    public function sendmails(){
        $colas = ColaCorreo::take(5)->where('estado', 0)->get();
        foreach($colas as $cola){
            try {
                if($cola->tipo == 'MAILING'){
                    $data = json_decode($cola->parametros,true);
                    $this->sendmailing($data['view'],$data['asunto'],$cola->email,$data['var1'],$data['var2'],$data['var3'],$data['var4'],$data['var5']);
                    $cola->delete();
                }
            }catch(\Exception $e) {
                $cola->estado = 1;
                $cola->save();
                $cola->error = $e->getCode();
                $cola->msg = $e->getMessage();
                $cola->save();
            }
        }
    }
    static function sendmailing($view, $asunto ,$email = null, $var1 = null, $var2 = null, $var3 = null, $var4 = null, $var5 = null){
        $mailer = Mailer::orderBy('envios', 'ASC')->where('estado', 1)->first();
        $detalles = [
            'view' => $view,
            'asunto' => $asunto,
            'email' => $email,
            'var1' => $var1,
            'var2' => $var2,
            'var3' => $var3,
            'var4' => $var4,
            'var5' => $var5,
        ];
        $mailer->envios = $mailer->envios+1;
        $mailer->save();
        Mail::mailer($mailer->mailer)->to($email)->send(new SendMailing($detalles));
    }
}
