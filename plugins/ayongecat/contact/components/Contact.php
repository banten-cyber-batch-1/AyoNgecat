<?php namespace Ayongecat\Contact\Components;

use Flash;
use Redirect;

use Cms\Classes\ComponentBase;

use Ayongecat\Contact\Models\Contact as ContactModels;

class Contact extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Contact Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init()
    {
        $component = $this->addComponent(
            'Responsiv\Uploader\Components\FileUploader',
            'attachmentUploader',
            ['deferredBinding' => false]
        );
        $component->bindModel('attachment', new ContactModels);
    }

    public function onContact()
    {
        $contact          = new ContactModels;
        $contact->subject = post('subject');
        $contact->name    = post('name');
        $contact->phone   = post('phone');
        $contact->email   = post('email');
        $contact->body    = post('body');
        $contact->save();

        Flash::success('Kontak berhasil dikirim');
        return Redirect::refresh();
    }
}
