<div id="modal_add_category" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
            </div>

            <form action="{{ route('categories.store') }}" method="POST" id="addCategoryForm">
                @csrf
                <div class="modal-body">
                    New Category <input type="text" name="expense_category" id="txt_expense_category" class="form-select" required autofocus> 
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>