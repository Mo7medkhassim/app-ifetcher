<?php

// namespace App\Notifications;

// use App\Models\Trip;
// use Illuminate\Bus\Queueable;
// use Illuminate\Notifications\Notification;

// class TripCreated extends Notification
// {
//     use Queueable;

//     public $trip;

    /**
     * Create a new notification instance.
     *
    //  * @return void
     */
    // public function __construct(Trip $trip)
    // {
    //     $this->trip = $trip;
    // }

    /**
     * Get the notification's delivery channels.
     *
    //  * @param mixed $notifiable
    //  * @return array
    //  */
    // public function via($notifiable)
    // {
    //     return ['database'];
    // }

    /**
     * Get the mail representation of the notification.
     *
//      * @param mixed $notifiable
//      * @return \Illuminate\Notifications\Messages\MailMessage
//      */
//     public function toMail($notifiable)
//     {
//         return (new MailMessage)
//             ->line('The introduction to the notification.')
//             ->action('Notification Action', url('/'))
//             ->line('Thank you for using our application!');
//     }

//     /**
//      * Get the array representation of the notification.
//      *
//      * @param mixed $notifiable
//      * @return array
//      */
//     public function toArray($notifiable)
//     {
//         return [
//             'text' => __('trips.new_trip_created'),
//             'trip_id' => $this->trip->id,
//             'show_url' => route('provider.trips.show', $this->trip->id)
//         ];
//     }
// }
