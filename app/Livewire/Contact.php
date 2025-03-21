<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
class Contact extends Component
{
    public $email;
    public $phone;
    public $content;
    public $capcha;
    public function mount()
    {
        $this->capcha = Cookie::get('capcha') ?? 0;
        Cookie::queue(Cookie::forget('capcha'));
    }
    public function sendMail()
    {

        if ($this->email == null || $this->phone == null || $this->content == null) {
            session()->flash('message', 'Vui lòng nhập đầy đủ thông tin!');
            return;
        }
        if (!$this->capcha) {
            session()->flash('message', 'Vui lòng xác thực captcha!');
            return;
        }
        // Gửi email
        Mail::to('2509roblox@gmail.com')->send(new ContactFormMail($this->email, $this->phone, $this->content));
        Mail::to('trangiangzxc@gmail.com')->send(new ContactFormMail($this->email, $this->phone, $this->content));
        $this->reset(['email', 'phone', 'content']);
        session()->flash('success', 'Email đã được gửi thành công!');

        // Reset các trường sau khi gửi

    }

    public function render()
    {
        return view('livewire.contact');
    }
}