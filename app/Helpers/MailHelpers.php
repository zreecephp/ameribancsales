<?php
namespace App\Helpers;


class MailHelpers {
    public static function ContactForm()
    {
        return [
            'contactEmail' => [
                'fromEmail' => 'info@ameribancsales.net',
                'toEmail' => 'info@ameribancmail.com',
                'subject' => 'New Message from Contact Page',
            ],
            'careerEmail' => [
                //'fromEmail' => 'websiteresume@ameribancsales.net',
				'fromEmail' => 'recruiting@ameribancsales.net',
                //'toEmail' => 'websiteresume@ameribancmail.com',
				'toEmail' => 'recruiting@ameribancsales.net',
                'subject' => 'New Resume from Ameribanc website',
            ],
            'customerServiceEmail' => [
                'fromEmail' => 'customerservice@ameribancsales.net',
                'toEmail' => 'customerservice@ameribancmail.com',
                'subject' => 'New Support item from Ameribanc website',
            ],
		];
	}
}

