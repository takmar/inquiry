<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbInquiryContent Entity
 *
 * @property int $id
 * @property int $mtb_inquiry_kind_id
 * @property string $name
 * @property string $mail_address
 * @property string $content
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\MtbInquiryKind $mtb_inquiry_kind
 */
class DtbInquiryContent extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'mtb_inquiry_kind_id' => true,
        'name' => true,
        'mail_address' => true,
        'content' => true,
        'created' => true,
        'modified' => true,
        'mtb_inquiry_kind' => true
    ];
}
