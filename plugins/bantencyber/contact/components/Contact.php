<?php namespace Bantencyber\Contact\Components;

use Flash;
use Redirect;
use ValidationException;

use Cms\Classes\ComponentBase;

use Bantencyber\Contact\Models\Contact as ContactModels;

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

    public function onSend()
    {
        try {
            $data    = post();
            $contact = ContactModels::make($data);
            $contact->save();
            Flash::success('Berhasil mengirim pesan');
            return Redirect::refresh();

        } catch (Exception $e) {
            Flash::error($e->getMessage());
            return;
        }
        catch (ValidationException $e) {
            Flash::error($e->getMessage());
        }
    }
}
