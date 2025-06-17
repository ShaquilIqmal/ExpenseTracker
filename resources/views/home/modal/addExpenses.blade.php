<div id="modal_add_expenses" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add Expenses</h5>
            </div>

            <form action="{{ route('expense.store') }}" method="POST" id="addExpenseForm">
                @csrf
                <div class="modal-body">
                    <select name="add_expense_category" id="txt_add_expense_category" class="form-select" aria-label="Select Category">
                        <option value="" disabled selected>Select Category</option>
                        @foreach ($getExpenseCategory as $ExpenseCategory)
                            <option value="{{ $ExpenseCategory['id'] }}">{{ $ExpenseCategory['category_name'] }}</option>
                        @endforeach
                    </select>
                    <br>
                    Title <input type="text" name="expense_title" id="txt_expense_title" class="form-control" required autofocus> 
                    Amount <input type="double" name="expense_amount" id="txt_expense_amount" class="form-control" required autofocus> 
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>


        </div>
    </div>
</div>