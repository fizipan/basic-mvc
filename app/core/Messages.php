<?php

class Messages
{
    public static function setMessage($pesan, $type)
    {
        $_SESSION['message'] = [
            'pesan' => $pesan,
            'type' => $type
        ];
    }

    public static function message()
    {
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-' . $_SESSION['message']['type'] . ' alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['message']['pesan'] . ' </strong>' . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION['message']);
        }
    }
}
