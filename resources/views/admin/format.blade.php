Route::prefix('admin')->controller(ProductController::class)->name('admin.')->group(function () {
    Route::get('product/index', 'index')->name('product.index');
    Route::get('product/create', 'create')->name('product.create');
    Route::post('product/store', 'store')->name('product.store');

    Route::get('product/edit/{id}', 'edit')->name('product.edit');
    Route::post('product/update/{id}', 'update')->name('product.update');

    Route::get('product/delete/{id}', 'delete')->name('product.delete');
});