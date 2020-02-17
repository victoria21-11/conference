<div class="mb-3">
    <div class="row">
        <div class="col-lg-4">
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.id',
    'model' => 'filters.id',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.title',
    'model' => 'filters.title',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.textarea', [
    'lang' => 'admin.conferences.columns.description',
    'model' => 'filters.description',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.start_date',
    'model' => 'filters.start_date',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.end_date',
    'model' => 'filters.end_date',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.active',
    'model' => 'filters.active',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.text', [
    'lang' => 'admin.conferences.columns.registration',
    'model' => 'filters.registration',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.created_at',
    'model' => 'filters.created_at',
])
@endcomponent
</div>
<div class="col-lg-4">
@component('admin.components.date', [
    'lang' => 'admin.conferences.columns.updated_at',
    'model' => 'filters.updated_at',
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
