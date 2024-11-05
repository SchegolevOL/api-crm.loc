<?php
namespace App\Services\Request;

use App\Services\Response\ResponseService;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class ApiRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();


        throw new HttpResponseException(
            ResponseService::sendJsonResponse(
                false,
                Response::HTTP_UNPROCESSABLE_ENTITY,
                $errors
            )
        );
    }
}
