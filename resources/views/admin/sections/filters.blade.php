<div class="mb-3">
    <div class="row">
        <div class="col-lg-4">
        @component('admin.components.text', [
            'lang' => 'admin.sections.columns.title',
            'model' => 'filters.title',
        ])
        @endcomponent
        </div>
        <div class="col-lg-4">
        @component('admin.components.text', [
            'lang' => 'admin.sections.columns.coordinator_id',
            'model' => 'filters.coordinator_id',
        ])
        @endcomponent
        </div>
        <div class="col-lg-4">
        @component('admin.components.text', [
            'lang' => 'admin.sections.columns.conference_id',
            'model' => 'filters.conference_id',
        ])
        @endcomponent
        </div>
        <div class="col-lg-4">
        @component('admin.components.text', [
            'lang' => 'admin.sections.columns.published',
            'model' => 'filters.published',
        ])
        @endcomponent
        </div>

        <div class="col-auto align-self-end">
            <button type="button" class="btn btn-warning mb-3" @click="clearFilters">@lang('admin.clear')</button>
        </div>
        <div class="col-auto align-self-end">
            <button type="button" class="btn btn-primary mb-3" @click="getData">@lang('admin.search')</button>
        </div>
    </div>
</div>
