<?php

namespace App\Exports;

use App\Models\Feedback;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UserExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::latest()->get();
    }

    /**
     * @var Feedback
     *
     * @return array
     */
    public function map($user): array
    {
        return [
            $user->name,
            $user->email,
            $user->npn,
            $user->phone,
            $user->zip,
            $user->sunfire_access ? 'Yes' : 'No',
            $user->created_at,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return ['Name', 'Email', 'NPN', 'Phone', 'ZIP', 'Sunfire Access', 'Created At'];
    }
}
