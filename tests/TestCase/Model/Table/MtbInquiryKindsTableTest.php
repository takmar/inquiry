<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MtbInquiryKindsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MtbInquiryKindsTable Test Case
 */
class MtbInquiryKindsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MtbInquiryKindsTable
     */
    public $MtbInquiryKinds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mtb_inquiry_kinds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MtbInquiryKinds') ? [] : ['className' => MtbInquiryKindsTable::class];
        $this->MtbInquiryKinds = TableRegistry::getTableLocator()->get('MtbInquiryKinds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MtbInquiryKinds);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getNameInfos method
     *
     * @return void
     */
    public function testGetNameInfos()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getNameInfoById method
     *
     * @return void
     */
    public function testGetNameInfoById()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
