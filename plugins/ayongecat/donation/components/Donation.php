<?php namespace Ayongecat\Donation\Components;

use Flash;
use Redirect;
use Validator;

use Cms\Classes\ComponentBase;

use Ayongecat\Donation\Models\Donation as DonationModels;
use Ayongecat\Program\Models\Program as ProgramModels;
use Ayongecat\Bank\Models\Bank as BankModels;

class Donation extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Donation Component',
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
        $component->bindModel('attachment', new DonationModels);
    }

    public function onConfirm()
    {
        $donation                = new DonationModels;
        $donation->program       = post('program');
        $donation->bank          = post('bank');
        $donation->donationed_at = date('Y-m-d H:i:s');
        $donation->name          = post('name');
        $donation->phone         = post('phone');
        $donation->email         = post('email');
        $donation->value         = post('value');
        $donation->save();

        Flash::success('Konfirmasi berhasil terkirim');
        return Redirect::refresh();
    }

    public function getProgram()
    {
        return ProgramModels::orderBy('name', 'asc')->get();
    }

    public function getAccount()
    {
        return BankModels::orderBy('created_at', 'asc')->get();
    }
}
