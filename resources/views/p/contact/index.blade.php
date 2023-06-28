@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container content" id="p-contact">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <section id="contact-form">
                    <h2>
                        Entrer en contact
                    </h2>

                    <p>
                        si vous rencontrez des problèmes avec ce service,
                        <a href="mailto:{{ config('kelens.admin_support_email') }}">
                            veuillez demander de l'aide.
                        </a>
                    </p>

                    <div class="card mb-5">
                        <form method="POST" action="{{ route('contact.index') }}">
                            @csrf
                            <div class="user-box {{ $errors->has('name') ? 'has-error' : '' }}">
                                <input type="text" name="name" id="name" class="form-control" required="required"
                                       value="{{ old('name') }}">
                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                <label for="name">
                                    Nom
                                </label>
                            </div>

                            <div class="user-box {{ $errors->has('email') ? 'has-error' : '' }}">
                                <input type="email" name="email" id="email" class="form-control" required="required"
                                       value="{{ old('email') }}">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                <label for="email">
                                    Adresse mail
                                </label>
                            </div>

                            <div class="user-box {{ $errors->has('message') ? 'has-error' : '' }}">
                                <textarea type="message" name="message" id="message" class="form-control" required="required">
                                    {{ old('message') }}
                                </textarea>
                                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                                <label for="text">
                                    Message
                                </label>
                            </div>

                            <button class="btn btn-principal" type="submit">
                                Envoyer
                            </button>
                        </form>
                    </div>
                </section>
            </div>

            <div class="col-md-4 mb-5 mb-md-0">
                <section id="contact-infos">
                    <div class="banner">
                        <div class="banner-icon">
                            <i class="bi bi-info-lg bi-2X"></i>
                        </div>
                        <div class="banner-title">
                            <h3>
                                INFORMATIONS
                            </h3>
                        </div>
                    </div>
                    <div id="discord_widget" class="card">
                        <div class="card-header">
                            <h5>
                                <i class="bi bi-discord bi-2X"></i>
                                Discord
                            </h5>
                        </div>
                        <div class="kelens-widget kelens-block" data-widget="kelens_discord_widget">
                            <div class="kelens-content">
                                <p class="kelens-Discordusers"></p>
                                <div class="kelens-Discordinfo">
                                    <span class="kelens-js--Discordcount"></span>
                                    <a href="https://discord.kelens.fr" target="_blank" class="btn btn-principal">
                                        Rejoindre
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
