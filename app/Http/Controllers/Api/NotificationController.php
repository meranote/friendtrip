<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function __construct() {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        $this->middleware('jwt.auth');
    }

    /**
     * @SWG\Get(
     *      path="/notifications",
     *      summary="Get all notification",
     *      tags={"notification"},
     *      description="Get all notification of current authenticated user (token)",
     *      operationId="getAllNotification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Token",
     *          type="string",
     *          default="Bearer ",
     *          required=true
     *      ),
     *      @SWG\Parameter(
     *          in="query",
     *          name="page",
     *          description="Pagination page",
     *          type="integer"
     *      ),
     *      @SWG\Response(
     *          response="200",
     *          description="Notifications",
     *          @SWG\Schema(ref="#/definitions/AllNotification")
     *      ),
     *      @SWG\Response(
     *          response="400",
     *          description="No token provided or invalid"
     *      ),
     *      @SWG\Response(
     *          response="401",
     *          description="Token expired"
     *      )
     * )
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO get all notifications
    }

    /**
     * @SWG\Put(
     *      path="/notifications/{id}",
     *      summary="Update notification status",
     *      tags={"notification"},
     *      description="Update notification status",
     *      operationId="updateNotificationStatus",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Token",
     *          type="string",
     *          default="Bearer ",
     *      ),
     *      @SWG\Parameter(
     *          in="path",
     *          name="id",
     *          description="Notification ID",
     *          type="integer",
     *          required=true
     *      ),
     *      @SWG\Parameter(
     *          in="body",
     *          name="body",
     *          description="Notification status",
     *          required=true,
     *          @SWG\Schema(ref="#/definitions/NotificationStatus")
     *      ),
     *      @SWG\Response(
     *          response="200",
     *          description="Update notification successful"
     *      ),
     *      @SWG\Response(
     *          response="400",
     *          description="No token provided or invalid"
     *      ),
     *      @SWG\Response(
     *          response="401",
     *          description="Token expired or no permission"
     *      ),
     *      @SWG\Response(
     *          response="404",
     *          description="Notification not found"
     *      ),
     *      @SWG\Response(
     *          response="422",
     *          description="Invalid parameters or given status"
     *      ),
     * )
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO finish update notification status
    }

    /**
     * @SWG\Delete(
     *      path="/notifications/{id}",
     *      summary="Remove notification",
     *      tags={"notification"},
     *      description="Delete notification",
     *      operationId="deleteNotification",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Token",
     *          type="string",
     *          default="Bearer ",
     *      ),
     *      @SWG\Parameter(
     *          in="path",
     *          name="id",
     *          description="Notification ID",
     *          type="integer",
     *          required=true
     *      ),
     *      @SWG\Response(
     *          response="200",
     *          description="Remove notification successful"
     *      ),
     *      @SWG\Response(
     *          response="400",
     *          description="No token provided or invalid"
     *      ),
     *      @SWG\Response(
     *          response="401",
     *          description="Token expired or no permission"
     *      ),
     *      @SWG\Response(
     *          response="404",
     *          description="Notification not found"
     *      ),
     * )
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // TODO finish remove notification
    }
}