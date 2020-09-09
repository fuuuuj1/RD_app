<?php

namespace App\Notifications;

// 新たに作成したMailクラスであるBareMailを使用することの宣言
use App\Mail\BareMail;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

// 既存のNotificationクラスの継承を行なっている
class PasswordResetNotification extends Notification
{
    use Queueable;

    public $token;
    public $mail;

    /**
     * Create a new notification instance.
     * 上で定義したプロパティ(変数?)に__constructメソッドを用いて外部からの引数をインジェクションする
     *
     * @return void
     */
    public function __construct(string $token, BareMail $mail)
    {
        $this->token = $token;
        $this->mail = $mail;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     * toMailメソッドで送信するメールの設定を行う
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return $this->mail
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->to($notifiable->email)
            ->subject('[RD]パスワード再設定')
            ->text('emails.password_reset')
            ->with([
                'url' => route('password.reset', [
                    'token' => $this->token,
                    'email' => $notifiable->email,
                ]),
                'count' => config(
                    'auth.passwords.' .
                        config('auth.defaults.passwords') .
                        '.expire'
                ),
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
