<?php

namespace App\Http\Requests\Guest;

use App\Models\Guest;
use Exception;
use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function checkNameComplete($name)
    {
        $nameComplete = explode(' ', $name);
        if (count($nameComplete) < 2) {
            throw new Exception('The name is not complete to validate');
        }

        return;
    }

    public function checkIfGuestExists($name)
    {
        $namesBySentence = explode(' ', $name);
        $guests = Guest::get();
        foreach ($guests as $guest) {
            $reference = null;
            $guestNames = explode(' ', $guest->name);

            foreach ($namesBySentence as $singleName) {
                foreach ($guestNames as $guestName) {
                    if (ucfirst($singleName) == ucfirst($guestName)) {
                        $reference[] = $guestName;
                    }
                }
            }

            if ($reference) {
                if (count($reference) >= 2) {
                    return $guest;
                }
            }
        }

        return null;
    }

    public function convertName($name)
    {
        $names = explode(' ', $name);
        $explodeArray = [];
        foreach ($names as $name) {
            $explodeArray[] = ucfirst($name);
        }

        return implode(' ', $explodeArray);
    }

    public function formatRequest($data, $request)
    {
        $data['name'] = $request->convertName($request->name);
        $data['assistance'] = $request->assistance == Guest::ANSWER_TRUE ? true : false;

        return $data;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'assistance' => 'required'
        ];
    }
}
