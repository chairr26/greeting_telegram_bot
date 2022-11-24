<?php

/**
 * This file is part of the PHP Telegram Bot example-bot package.
 * https://github.com/php-telegram-bot/example-bot/
 *
 * (c) PHP Telegram Bot Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Generic message command
 *
 * Gets executed when any type of message is sent.
 *
 * In this message-related context, we can handle any kind of message.
 */

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Request;

class GenericmessageCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'genericmessage';

    /**
     * @var string
     */
    protected $description = 'Handle generic message';

    /**
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * Main command execution
     *
     * @return ServerResponse
     */
    public function execute(): ServerResponse
    {
        $message = $this->getMessage();
        $user_id = $message->getFrom()->getId();
        $chat_id = $message->getChat()->getId();
        $message_text = $message->getText(true);

        $pesan['Rian'] = "Hi teman tersayang \n\n💝💝💝💝\nselamat tambah tua\nsemoga apa yang diharapkan di umur segini bisa tercapai\ndikurangin yah halunya, didekatkan dengan jodoh yang bisa mengayomi jiakh\ndiperkuat skill cenayangnya, ditambah lagi stock sabarnya\nsemoga kedepannya sehat selalu, dikasih keberkahan, diselimuti sama hal hal baik\nsemangat menjadi bank berjalan untuk kita semua yah\naamiin\n\nRian";
        $pesan['Amanda'] = "Selamat ulang tahun kadalskii 💚 sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta ❤️‍🔥❤️‍🔥 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🤌🏻🤌🏻\n\n Amanda";
        $pesan['Dion'] = "Selamat ulang tahun kadalskii 😳 sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta 🍃🍃 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🤞🏼🤞🏼\n\n Dion";
        $pesan['Iky'] = "Selamat ulang tahun kadalskii 🤢 sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta 👅👅 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🧚🧚\n\n Iky";
        $pesan['Rio'] = "Selamat ulang tahun kadalskii ❤️ sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta 🐹🐹 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🦕🦕\n\n Rio";
        $pesan['Milla'] = "Selamat ulang tahun kadalskii 🌺 sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta ❤️‍🔥❤️‍🔥 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🦈🦈\n\n Milla";
        $pesan['Fia'] = "Selamat ulang tahun kadalskii 🦚 sehat selalu, panjang umur, makin sabar dan tetap berapi-api kayak kereta ❤️‍🔥❤️‍🔥 semoga semua cita cita dan harapannya terkabul yaa, terus senantiasa diberi kelancaran dalam segala kegiataaan 🐛🐛\n\n Fia";

        foreach ($pesan as $key => $value) {
            if ($message_text == $key) {
                $data = [
                    'chat_id'      => $chat_id,
                    'text'         => $pesan[$key],
                ];

                return Request::sendMessage($data);
            }
        }

        return Request::emptyResponse();
    }
}
