<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inquiry Controller
 */
class InquiryController extends AppController
{
    public $components = ["Inquiry"];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set([
            'title' => '入力',
            'kind_info' => $this->Inquiry->getKindInfo(),
        ]);
    }

    public function confirm()
    {
        $kind_id = $this->request->getData('kind_id');
        $user_name = $this->request->getData('name');
        $mail_address = $this->request->getData('mail_address');
        $content = $this->request->getData('content');

        if (!$this->Inquiry->validate($this->request->getData())) {
            throw new Exception();
        }

        $this->set([
            'title' => '確認',
            'kind_info' => $this->Inquiry->getKindInfo($kind_id),
            'name' => $user_name,
            'mail_address' => $mail_address,
            'content' => $content,
        ]);
    }

    public function submit() {
        $data = $this->request->getData();
        $data['mtb_inquiry_kind_id'] = $data['kind_id'];

        $result = $this->Inquiry->createData($data);
        if (!$result) {
            throw new Exception();
        }

        return $this->redirect(
            ['controller' => 'Inquiry', 'action' => 'completion']
        );
    }

    public function completion()
    {
        $this->set([
            'title' => '完了',
        ]);
    }
}
