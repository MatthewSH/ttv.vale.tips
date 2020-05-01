<?php


namespace App\Services;


use Illuminate\Http\Request;

class TwitchUser
{
    private $ttvUser;

    public function __construct(Request $request) {
        $this->ttvUser = $request->session()->get('ttv_user');
    }

    public function getUser() {
        return $this->ttvUser;
    }

    public function getName() {
        return $this->ttvUser->nickname;
    }

    public function getProfilePicture() {
        return $this->ttvUser->avatar;
    }

    public function getAvatar() {
        return $this->getProfilePicture();
    }

    public function getViewCount() {
        return $this->ttvUser->view_count;
    }

    public function getBroadcasterType() {
        return $this->ttvUser->user['broadcaster_type'];
    }

    public function isAuthor() {
        return $this->ttvUser->is_author;
    }
}
