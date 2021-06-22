<?php namespace Twpars\EloquentTaggable\Test\Configuration;

use Twpars\EloquentTaggable\Exceptions\NoTagsSpecifiedException;
use Twpars\EloquentTaggable\Test\TestCase;
use Twpars\EloquentTaggable\Test\TestModel;
use Illuminate\Database\Eloquent\Collection;


/**
 * Class ScopeTests
 */
class ScopeExceptionTests extends TestCase
{

    /**
     * @inheritdoc
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app['config']->set('taggable.throwEmptyExceptions', true);
    }

    /**
     * Test searching by all tags, but passing no tags.
     */
    public function testWithAllTagsEmpty()
    {
        $this->expectException(NoTagsSpecifiedException::class);

        /** @var Collection $models */
        TestModel::withAllTags('')->get();
    }

    /**
     * Test searching by any tags, but passing no tags.
     */
    public function testWithAnyTagsEmpty()
    {
        $this->expectException(NoTagsSpecifiedException::class);

        /** @var Collection $models */
        TestModel::withAnyTags('')->get();
    }
}
