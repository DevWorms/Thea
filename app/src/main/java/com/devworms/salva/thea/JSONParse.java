package com.devworms.salva.thea;

import android.util.Log;

import com.squareup.okhttp.MediaType;
import com.squareup.okhttp.OkHttpClient;
import com.squareup.okhttp.Request;
import com.squareup.okhttp.RequestBody;
import com.squareup.okhttp.Response;

import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.io.UnsupportedEncodingException;

/**
 * Created by salva on 15/10/2016.
 */

public class JSONParse {
    static InputStream is = null;
    static JSONObject jObj = null;
    static String json = "";
    Response respuesta;
    // constructor



    // function get json from url
    // by making HTTP POST or GET mehtod
    public String makeHttpRequest(String url, String method,String bd,String bd2) {
        Log.d("metho : ", "> " + method);
        // Making HTTP request
        try {

            // check for request method
            if (method == "POST") {
                // request method is POST
                // defaultHttpClient
                OkHttpClient client = new OkHttpClient();

                MediaType mediaType = MediaType.parse("application/octet-stream");
                RequestBody body = RequestBody.create(mediaType,bd );
                Request request = new Request.Builder()
                        .url(url)
                        .post(body)
                        .build();


                respuesta = client.newCall(request).execute();


            }

        } catch (UnsupportedEncodingException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }

        try {
            Log.d("message: ", "> " + respuesta.message().toString());
            if("OK".equals(respuesta.message().toString())){
                json = respuesta.body().string().toString();
            }else{
                json = "error"  ;
            }
        } catch (Exception e) {
            Log.e("Buffer Error", "Error converting result " + e.toString());
        }

        // return JSON String
        return json;

    }
}
