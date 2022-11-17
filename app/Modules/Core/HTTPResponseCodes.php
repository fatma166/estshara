<?php
  declare(strict_types=1);
  namespace App\Modules\Core;

  abstract class HTTPResponseCodes
  {
      const Sucess = [
          "status" => "success",
          "code" => 200,
          "message" => "Request has been successfully processed."
      ];

      const NotFound = [
          "status" => "not_found_error",
          "code" => 404,
          "message" => "Could not locate resource."
      ];

      const InvalidArguments = [
          "status" => "invalid_arguments_error",
          "code" => 404,
          "message" => "Invalid arguments. Server failed to process your request."
      ];

      const BadRequest = [
          "status" => "bad_request",
          "code" => 400,
          "message" => "Server failed to process your request."
      ];
      const UnAuth= [
       
        "status" => "Unauthorized",
        "code" => 401,
        "message" => "Unauthorized to process your request."
    ];
    const Validation= [
        "status" => "valiadtion error",
        "code" => 422,
        "message" => "validation error "
    ];
  }
      