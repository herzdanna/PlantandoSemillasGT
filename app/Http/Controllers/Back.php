<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\ColaCorreo;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Video;
use App\Models\Number;
use App\Models\Text;
use App\Models\Partner;
use App\Models\Report;
use Auth;
use Http;
use Session;
use DateTime;

class Back extends Controller
{
    public function index_back(){
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('back.index_back', compact('users'));
    }
    public function get_edit($id){
        $user = User::find($id);
        return $user;
    }
    public function user_edit(Request $request){
        $user = User::find($request->id_user);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        session()->flash('exito', 'Congratulations the account was successfully edited!');
        return redirect('/admin');
    }
    public function user_delete($id){
        $user = User::find($id);
        $user->delete();
        session()->flash('exito', 'User successfully deleted');
        return redirect('/admin');
    }
    public function post_register(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect('/admin')->withErrors(['There is already an account with the email '.$request->email]);  
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->save();
            session()->flash('exito', 'Congratulations the account was successfully created!');
            return redirect('/admin');
        }
    }
    public function post_contact(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->text = $request->message;
        $contact->save();

        $cola = new ColaCorreo();
        $cola->tipo = 'MAILING';
        $cola->email = $request->email;
        $cola->estado = 0;
        $cola->parametros = json_encode(array(
            "view" => "emails.contact",
            "asunto" => "Contact Form",
            "var1" => $request->name,
            "var2" => $request->email,
            "var3" => $request->subject,
            "var4" => $request->message,
            "var5" => ""
        ));
        $cola->save();
        session()->flash('exito', 'Message sent, we will reply as soon as possible.');
        return redirect('/join-us');
    }
    public function index_contact(){
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('back.index_contact', compact('contacts'));
    }
    public function contact_delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('exito', 'Contact form successfully deleted');
        return redirect('/contactform');
    }
    public function index_slider(){
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('back.index_slider', compact('sliders'));
    }
    public function post_slider(Request $request){
        $slider = new Slider();
        $slider->boton_txt = $request->boton_txt;
        $slider->boton_url = $request->boton_url;
        $slider->lang = $request->lang;
        $slider->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $slider->image = '/sliders/'.$slider->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/sliders', $slider->id.$foto->getClientOriginalName());
                    $slider->save();
                }
            }
            session()->flash('exito', 'Slider successfully created');
            return redirect('/slider');
        }else{
            $slider->delete();
            return redirect('/slider')->withErrors(['Image is needed for a slider']);
        }
    }
    public function get_slider($id){
        $slider = Slider::find($id);
        return $slider;
    }
    public function edit_slider(Request $request){
        $slider = Slider::find($request->id_slider);
        $slider->boton_txt = $request->boton_txt;
        $slider->boton_url = $request->boton_url;
        $slider->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $slider->image = '/sliders/'.$slider->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/sliders', $slider->id.$foto->getClientOriginalName());
                    $slider->save();
                }
            }
        }
        session()->flash('exito', 'Slider successfully edited');
        return redirect('/slider');
    }
    public function slider_delete($id){
        $slider = Slider::find($id);
        $slider->delete();
        session()->flash('exito', 'Slider successfully deleted');
        return redirect('/slider');
    }
    public function index_blog_edit(){
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('back.index_blog_edit', compact('blogs'));
    }
    public function post_blog_edit(Request $request){
        $blog = new Blog();
        $blog->lang = $request->lang;
        $blog->title = $request->title;
        $blog->align = $request->align;
        $blog->color = $request->color;
        $blog->text =  $request->text;
        $blog->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $blog->image = '/blogfoto/'.$blog->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/blogfoto', $blog->id.$foto->getClientOriginalName());
                    $blog->save();
                }
            }
            session()->flash('exito', 'Blog successfully created');
            return redirect('/blogs');
        }else{
            $slider->delete();
            return redirect('/blogs')->withErrors(['Image is needed for a Blog']);
        }
    }
    public function get_glob($id){
        $blog = Blog::find($id);
        return $blog;
    }
    public function edit_blog(Request $request){
        $blog = Blog::find($request->id_blog);
        $blog->title = $request->title;
        $blog->align = $request->align;
        $blog->color = $request->color;
        $blog->text =  $request->text;
        $blog->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $blog->image = '/blogfoto/'.$blog->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/blogfoto', $blog->id.$foto->getClientOriginalName());
                    $blog->save();
                }
            }
        }
        session()->flash('exito', 'Blog successfully edited');
        return redirect('/blogs');
    }
    public function blog_delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('exito', 'Blog successfully deleted');
        return redirect('/blogs');
    }
    public function index_videos(){
        $videos = Video::orderBy('created_at', 'DESC')->get();
        return view('back.index_videos', compact('videos'));
    }
    public function post_videos(Request $request){
        $video = new Video();
        $video->title = $request->title;
        $video->url = $request->url;
        $video->lang = $request->lang;
        $video->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $video->image = '/videostorage/'.$video->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/videostorage', $video->id.$foto->getClientOriginalName());
                    $video->save();
                }
            }
            session()->flash('exito', 'Video successfully created');
            return redirect('/videos');
        }else{
            $video->delete();
            return redirect('/videos')->withErrors(['Image is needed for a video']);
        }
    }
    public function get_video($id){
        $video = Video::find($id);
        return $video;
    }
    public function edit_video(Request $request){
        $video = Video::find($request->id_video);
        $video->title = $request->title;
        $video->url = $request->url;
        $video->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $video->image = '/videostorage/'.$video->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/videostorage', $video->id.$foto->getClientOriginalName());
                    $video->save();
                }
            }
        }
        session()->flash('exito', 'Video successfully edited');
        return redirect('/videos');
    }
    public function video_delete($id){
        $video = Video::find($id);
        $video->delete();
        session()->flash('exito', 'Video successfully deleted');
        return redirect('/videos');
    }
    public function index_numbers_home_page(){
        $numbers = Number::orderBy('created_at', 'DESC')->where('page', 'Home')->get();
        return view('back.index_number_home_page', compact('numbers'));
    }
    public function post_numbers_home_page(Request $request){
        $number = new Number();
        $number->page = 'Home';
        $number->lang = $request->lang;
        $number->number = $request->number;
        $number->symbol = $request->symbol;
        $number->title = $request->title;
        $number->color = $request->color;
        $number->save();
        session()->flash('exito', 'Number successfully created');
        return redirect('/numbers/home_page');
    }
    public function get_numbers($id){
        $number = Number::find($id);
        return $number;
    }
    public function edit_numbers(Request $request){
        $number = Number::find($request->id_number);
        $number->number = $request->number;
        $number->symbol = $request->symbol;
        $number->title = $request->title;
        $number->color = $request->color;
        $number->save();
        session()->flash('exito', 'Number successfully edited');
        return redirect('/numbers/home_page');
    }
    public function numbers_home_page_delete($id){
        $number = Number::find($id);
        $number->delete();
        session()->flash('exito', 'Number successfully deleted');
        return redirect('/numbers/home_page');
    }
    public function index_text_what(){
        $texts = Text::orderBy('created_at', 'DESC')->where('page', 'What')->get();
        return view('back.index_text_what', compact('texts'));
    }
    public function post_text_what(Request $request){
        $text = new Text();
        $text->page = 'What';
        $text->lang = $request->lang;
        $text->color = $request->color;
        $text->title = $request->title;
        $text->text = $request->text;
        $text->save();        
        session()->flash('exito', 'Text successfully created');
        return redirect('/texts_what');
    }
    public function get_texts($id){
        $text = Text::find($id);
        return $text;
    }
    public function edit_texts(Request $request){
        $text = Text::find($request->id_text);
        $text->color = $request->color;
        $text->title = $request->title;
        $text->text = $request->text;
        $text->save();        
        session()->flash('exito', 'Text successfully edited');
        return redirect('/texts_what');
    }
    public function text_what_delete($id){
        $text = Text::find($id);
        $text->delete();
        session()->flash('exito', 'Text successfully deleted');
        return redirect('/texts_what');
    }
    public function index_partners(){
        $partners = Partner::orderBy('created_at', 'DESC')->get();
        return view('back.index_partners', compact('partners'));
    }
    public function post_partners(Request $request){
        $partner = new Partner();
        $partner->title = $request->title;
        $partner->lang = $request->lang;
        $partner->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $partner->foto = '/partnerstorage/'.$partner->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/partnerstorage', $partner->id.$foto->getClientOriginalName());
                    $partner->save();
                }
            }
            session()->flash('exito', 'Partner successfully created');
            return redirect('/partners');
        }else{
            $partner->delete();
            return redirect('/partners')->withErrors(['Image is needed for a partner']);
        }
    }
    public function get_partner($id){
        $partner = Partner::find($id);
        return $partner;
    }
    public function edit_partner(Request $request){
        $partner = Partner::find($request->id_partner);
        $partner->title = $request->title;
        $partner->save();
        $foto = $request->foto;
        if ($foto) {
            if(isset($foto)){
                if($foto->getClientOriginalName() != ''){
                    $partner->foto = '/partnerstorage/'.$partner->id.$foto->getClientOriginalName();
                    $foto->move(public_path().'/../../public_html/partnerstorage', $partner->id.$foto->getClientOriginalName());
                    $partner->save();
                }
            }
        }
        session()->flash('exito', 'Partner successfully edited');
        return redirect('/partners');
    }
    public function partners_delete($id){
        $partner = Partner::find($id);
        $partner->delete();
        session()->flash('exito', 'Partner successfully deleted');
        return redirect('/partners');
    }
    public function index_financial(){
        $reports = Report::orderBy('created_at', 'DESC')->where('tipe', 'FI')->get();
        return view('back.index_financial', compact('reports'));
    }
    public function post_financial(Request $request){
        $report = new Report();
        $report->tipe = 'FI';
        $report->title = $request->title;
        $report->lang = $request->lang;
        $report->save();
        $doc = $request->doc;
        if ($doc) {
            if(isset($doc)){
                if($doc->getClientOriginalName() != ''){
                    $report->doc = '/docs/'.$report->id.$doc->getClientOriginalName();
                    $doc->move(public_path().'/../../public_html/docs', $report->id.$doc->getClientOriginalName());
                    $report->save();
                }
            }
            session()->flash('exito', 'Doc successfully created');
            return redirect('/financial');
        }else{
            $report->delete();
            return redirect('/financial')->withErrors(['Doc is needed for a report']);
        }
    }
    public function financial_delete($id){
        $report = Report::find($id);
        $report->delete();
        session()->flash('exito', 'Report successfully deleted');
        return redirect('/financial');
    }
    public function index_anual(){
        $reports = Report::orderBy('created_at', 'DESC')->where('tipe', 'AN')->get();
        return view('back.index_anual', compact('reports'));
    }
    public function post_anual(Request $request){
        $report = new Report();
        $report->tipe = 'AN';
        $report->title = $request->title;
        $report->lang = $request->lang;
        $report->save();
        $doc = $request->doc;
        if ($doc) {
            if(isset($doc)){
                if($doc->getClientOriginalName() != ''){
                    $report->doc = '/docs/'.$report->id.$doc->getClientOriginalName();
                    $doc->move(public_path().'/../../public_html/docs', $report->id.$doc->getClientOriginalName());
                    $report->save();
                }
            }
            session()->flash('exito', 'Doc successfully created');
            return redirect('/anual');
        }else{
            $report->delete();
            return redirect('/anual')->withErrors(['Doc is needed for a report']);
        }
    }
    public function anual_delete($id){
        $report = Report::find($id);
        $report->delete();
        session()->flash('exito', 'Report successfully deleted');
        return redirect('/anual');
    }
}
