<?php namespace Twpars\EloquentTaggable\Test\Configuration;

use Twpars\EloquentTaggable\Test\CustomTagClass;
use Twpars\EloquentTaggable\Test\TestCase;


/**
 * Class CustomTagModelTests
 */
class CustomTagModelTests extends TestCase
{

    /**
     * @inheritdoc
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('taggable.model', CustomTagClass::class);
    }

    /**
     * Test custom tag model.
     */
    public function testCustomDelimiters()
    {
        $model = $this->newModel()->tag('Apple');

        $this->assertCount(1, $model->tags);

        $tag = $model->tags->first();
        $this->assertInstanceOf(CustomTagClass::class, $tag);
    }
}
