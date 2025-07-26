<x-mail::message>
# Nouvelle demande de contact

Un nouveau message a été envoyé pour le bien <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}" target="_blank">{{ $property->title }}</a>.

- Prénom: {{ $data['firstname'] }}
- Nom: {{ $data['lastname'] }}
- Email: {{ $data['email'] }}
- Téléphone: {{ $data['phone'] }}

**Message:**<br>
{{ $data['message'] }}
</x-mail::message>
