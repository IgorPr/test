<?php

class TicketsLoader
{
    private TicketRepositoryInterface $ticketRepository;
    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function load(int $ticketId) {
        return $this->ticketRepository->load($ticketId);
    }
}
