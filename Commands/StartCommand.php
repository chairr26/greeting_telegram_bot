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
 * Start command
 *
 * Gets executed when a user first starts using the bot.
 *
 * When using deep-linking, the parameter can be accessed by getting the command text.
 *
 * @see https://core.telegram.org/bots#deep-linking
 */

namespace Longman\TelegramBot\Commands\SystemCommands;

use Longman\TelegramBot\Commands\SystemCommand;
use Longman\TelegramBot\Entities\ServerResponse;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Entities\Keyboard;

class StartCommand extends SystemCommand
{
    /**
     * @var string
     */
    protected $name = 'start';

    /**
     * @var string
     */
    protected $description = 'Start command';

    /**
     * @var string
     */
    protected $usage = '/start';

    /**
     * @var string
     */
    protected $version = '1.2.0';

    /**
     * @var bool
     */
    protected $private_only = true;

    /**
     * Main command execution
     *
     * @return ServerResponse
     * @throws TelegramException
     */
    public function execute(): ServerResponse
    {

        $keyboards = new Keyboard(
            ['Rian'],
            ['Amanda', 'Dion'],
            ['Iky', 'Rio'],
            ['Milla', 'Fia']
        );


        $keyboard = $keyboards
            ->setResizeKeyboard(true)
            ->setOneTimeKeyboard(true)
            ->setSelective(false);

        $kalimat_pembuka = "🌺🌺🌺🌺 HAPPY BIRTHDAY 🌺🌺🌺🌺\nHi nyet\nHappy birthday yak, semoga diumur lu yg ke 21 ini dikasih rezeki yang berlimpah.\nSemoga bahagia selalu dan jangan jadi sad pipel terus lah.\nIni ada beberapa ucapan buat lu yak, baca satu-satu.\n";

        return $this->replyToChat($kalimat_pembuka, [
            'reply_markup' => $keyboard,
        ]);
    }
}
