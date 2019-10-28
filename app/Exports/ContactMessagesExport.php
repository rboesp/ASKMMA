<?php

namespace App\Exports;

use App\Models\ContactMessage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactMessagesExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ContactMessage::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return ['First Name', 'Last Name', 'Email', 'Zip Code', 'Interest', 'Created At'];
    }

    /**
     * @var ContactMessage contactMessage
     *
     * @return array
     */
    public function map($contactMessage): array
    {
        return [
            $contactMessage->first_name,
            $contactMessage->last_name,
            $contactMessage->email,
            $contactMessage->zip_code,
            $contactMessage->interest,
            $contactMessage->created_at,
        ];
    }
}
