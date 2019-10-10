<?php

namespace App\Exports;

use App\Models\Feedback;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FeedbackExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Feedback::all();
    }

    /**
     * @var Feedback
     *
     * @return array
     */
    public function map($feedback): array
    {
        return [
            $feedback->feedback_type,
            $feedback->email,
            $feedback->message,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return ['Feedback Type', 'Email', 'Message'];
    }
}
