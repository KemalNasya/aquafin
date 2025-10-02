<table border="1" cellspacing="0" cellpadding="5">
    <thead style="background: #f2f2f2;">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Amount</th>
            <th>Type</th>
            <th>Description</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $t)
            <tr>
                <td>{{ $t->id }}</td>
                <td>{{ $t->user->name ?? '-' }}</td>
                <td>{{ number_format($t->amount, 0, ',', '.') }}</td>
                <td>{{ ucfirst($t->type) }}</td>
                <td>{{ $t->description ?? '-' }}</td>
                <td>{{ $t->created_at->format('d-m-Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>

<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Total Income</th>
        <td>{{ number_format($totalIncome, 0, ',', '.') }}</td>
    </tr>
    <tr>
        <th>Total Expense</th>
        <td>{{ number_format($totalExpense, 0, ',', '.') }}</td>
    </tr>
    <tr style="background: #d9edf7;">
        <th>Net Balance</th>
        <td>{{ number_format($netBalance, 0, ',', '.') }}</td>
    </tr>
</table>
