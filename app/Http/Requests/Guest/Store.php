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
            $message = 'Parece que no estas siguiendo las instrucciones, ¡escribe completo y bien tu nombre!';
            return view('no_rules', ['message' => $message]);
            // throw new Exception('The name is not complete to validate');
        }

        return;
    }

    public function checkIfGuestExists($name)
    {
        $name = explode(' ', $name);
        $guests = Guest::get();

        foreach ($guests as $guest) {
            $guestName = explode(' ', $guest->name);          
            if ($guestName[0] == ucfirst($name[0])) {

                if (count($guestName) >= 4 && count($name) >= 4) {
                    if ($guestName[1] == ucfirst($name[1])) {
                        if ($guestName[2] == ucfirst($name[2])) {
                            if ($guestName[3] == ucfirst($name[3])) {
                                return $guest;
                            }
                        }
                    }
                }

                if (count($guestName) <= 3 && count($name) <= 3) {
                    if ($guestName[1] == ucfirst($name[1])) {
                        if ($guestName[2] == ucfirst($name['2'])) {
                            return $guest;
                        }
                    }
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
