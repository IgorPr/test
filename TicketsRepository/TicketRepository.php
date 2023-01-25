<?php

class TicketRepository implements TicketRepositoryInterface
{
    public function load($ticketID)
    {
        return Ticket::find()->where(['id' => $ticketId])->one();
    }

    public function save($ticket)
    {/*...*/
    }

    public function update($ticket)
    {/*...*/
    }

    public function delete($ticket)
    {/*...*/
    }
}
