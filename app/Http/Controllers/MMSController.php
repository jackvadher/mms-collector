<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;
use App\MmsLog;

class MMSController extends Controller {

    /**
     * This function will handle inbound MMS comes in Twilio and store the MMS in the database.
     * 
     * @param Request $request : Request contains the inbound MMS Data
     */
    public function handleInbound(Request $request) {
        if ($request->NumMedia > 0) {
//            $message = $twilio->messages($request->SmsSid)
//                    ->fetch();

            $sid = $request->SmsSid;
            $from = $request->From;
            $to = $request->To;
            $body = $request->Body;
            $numMedia = $request->NumMedia;
            $status = $request->SmsStatus;

            $mediaUrls = [];
            for ($i = 0; $i < $numMedia; $i++) {
                $filename = $i . "-" . $sid;

                $twilioMediaUrl = $request->get("MediaUrl" . $i);
                $destination_path = public_path("mms-media-files/" . $filename);

                array_push($mediaUrls, $request->get("MediaUrl" . $i));
            }

            MmsLog::create([
                'sid' => $sid,
                'from' => $from,
                'to' => $to,
                'body' => $body,
                'numMedia' => $numMedia,
                'MediaUrl' => json_encode($mediaUrls),
                'status' => $status
            ]);

            Log::info($request->all());
        }
        return $request->all();
    }

}
