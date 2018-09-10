<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

/**
 * Inquiry component
 */
class InquiryComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    private $inquiryKinds;
    private $inquiryContents;

    public function initialize(array $config) {
        $this->inquiryKinds = TableRegistry::get('MtbInquiryKinds');
        $this->inquiryContents = TableRegistry::get('DtbInquiryContents');
    }

    public function getKindInfo($id = false) {
        $info = false;

        if (!$id) {
            $info = $this->inquiryKinds->getKindNameInfos();
        } else {
            $info = $this->inquiryKinds->getKindNameInfoById($id);
        }

        return $info;
    }

    public function validate($data) {
        $validator = $this->inquiryContents->validationDefault(new Validator());

        $errors = $validator->errors($this->request->getData());
// var_dump($errors);
        return empty($errors) ? true : false;
    }

    public function createData($data) {
        return $this->inquiryContents->createData($data);
    }
}
