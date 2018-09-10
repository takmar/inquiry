<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DtbInquiryContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DtbInquiryContentsTable Test Case
 */
class DtbInquiryContentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DtbInquiryContentsTable
     */
    public $DtbInquiryContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dtb_inquiry_contents',
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
        $config = TableRegistry::getTableLocator()->exists('DtbInquiryContents') ? [] : ['className' => DtbInquiryContentsTable::class];
        $this->DtbInquiryContents = TableRegistry::getTableLocator()->get('DtbInquiryContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DtbInquiryContents);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test createData method
     *
     * @return void
     */
    public function testCreateData()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
