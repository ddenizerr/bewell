import React from "react";
import { route } from 'ziggy-js';
import { Head, useForm } from "@inertiajs/react";


type RegistrationFormData = {
    first_name: string;
    last_name: string;
    email: string;
    phone: string;
    date_of_birth: string;
    gender: string;
    height: string | number;
    goal: string;
    medical_conditions: string;
    allergies: string;
    dietary_preferences: string;
    activity_level: string;
    notes: string;
};

type Props = {
    translations: {
        title: string;
        first_name: string;
        last_name: string;
        submit: string;
    };
    locale: string;
};

export default function CreateRegistration({ translations }: Props) {
    const { data, setData, post, processing, errors } = useForm<RegistrationFormData>({
        first_name: "",
        last_name: "",
        email: "",
        phone: "",
        date_of_birth: "",
        gender: "",
        height: "",
        goal: "",
        medical_conditions: "",
        allergies: "",
        dietary_preferences: "",
        activity_level: "",
        notes: "",
    });

    function handleSubmit(e: React.FormEvent) {
        e.preventDefault();
        post(route("registrations.store"));
    }

    return (
        <>
            <Head title={translations.title} />

            <div className="max-w-2xl mx-auto py-10">
                <h1 className="text-2xl font-semibold mb-6">{translations.title}</h1>

                <form onSubmit={handleSubmit} className="space-y-4">
                    {/* First name */}
                    <div>
                        <label className="block text-sm font-medium mb-1">{translations.first_name}</label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.first_name}
                            onChange={(e) => setData("first_name", e.target.value)}
                        />
                        {errors.first_name && (
                            <p className="text-sm text-red-600 mt-1">{errors.first_name}</p>
                        )}
                    </div>

                    {/* Last name */}
                    <div>
                        <label className="block text-sm font-medium mb-1">{translations.last_name}</label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.last_name}
                            onChange={(e) => setData("last_name", e.target.value)}
                        />
                        {errors.last_name && (
                            <p className="text-sm text-red-600 mt-1">{errors.last_name}</p>
                        )}
                    </div>

                    {/* Email */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Email</label>
                        <input
                            type="email"
                            className="w-full border rounded px-3 py-2"
                            value={data.email}
                            onChange={(e) => setData("email", e.target.value)}
                        />
                        {errors.email && (
                            <p className="text-sm text-red-600 mt-1">{errors.email}</p>
                        )}
                    </div>

                    {/* Phone */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Phone</label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.phone}
                            onChange={(e) => setData("phone", e.target.value)}
                        />
                        {errors.phone && (
                            <p className="text-sm text-red-600 mt-1">{errors.phone}</p>
                        )}
                    </div>

                    {/* Date of birth */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Date of birth</label>
                        <input
                            type="date"
                            className="w-full border rounded px-3 py-2"
                            value={data.date_of_birth}
                            onChange={(e) => setData("date_of_birth", e.target.value)}
                        />
                        {errors.date_of_birth && (
                            <p className="text-sm text-red-600 mt-1">{errors.date_of_birth}</p>
                        )}
                    </div>

                    {/* Gender */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Gender</label>
                        <select
                            className="w-full border rounded px-3 py-2"
                            value={data.gender}
                            onChange={(e) => setData("gender", e.target.value)}
                        >
                            <option value="">Select…</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="other">Other</option>
                        </select>
                        {errors.gender && (
                            <p className="text-sm text-red-600 mt-1">{errors.gender}</p>
                        )}
                    </div>

                    {/* Height */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Height (cm)</label>
                        <input
                            type="number"
                            step="0.1"
                            className="w-full border rounded px-3 py-2"
                            value={data.height}
                            onChange={(e) => setData("height", e.target.value)}
                        />
                        {errors.height && (
                            <p className="text-sm text-red-600 mt-1">{errors.height}</p>
                        )}
                    </div>

                    {/* Goal */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Goal</label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.goal}
                            onChange={(e) => setData("goal", e.target.value)}
                        />
                        {errors.goal && (
                            <p className="text-sm text-red-600 mt-1">{errors.goal}</p>
                        )}
                    </div>

                    {/* Medical conditions */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Medical conditions</label>
                        <textarea
                            className="w-full border rounded px-3 py-2"
                            value={data.medical_conditions}
                            onChange={(e) => setData("medical_conditions", e.target.value)}
                        />
                        {errors.medical_conditions && (
                            <p className="text-sm text-red-600 mt-1">{errors.medical_conditions}</p>
                        )}
                    </div>

                    {/* Allergies */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Allergies</label>
                        <textarea
                            className="w-full border rounded px-3 py-2"
                            value={data.allergies}
                            onChange={(e) => setData("allergies", e.target.value)}
                        />
                        {errors.allergies && (
                            <p className="text-sm text-red-600 mt-1">{errors.allergies}</p>
                        )}
                    </div>

                    {/* Dietary preferences */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Dietary preferences</label>
                        <input
                            type="text"
                            className="w-full border rounded px-3 py-2"
                            value={data.dietary_preferences}
                            onChange={(e) => setData("dietary_preferences", e.target.value)}
                        />
                        {errors.dietary_preferences && (
                            <p className="text-sm text-red-600 mt-1">
                                {errors.dietary_preferences}
                            </p>
                        )}
                    </div>

                    {/* Activity level */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Activity level</label>
                        <select
                            className="w-full border rounded px-3 py-2"
                            value={data.activity_level}
                            onChange={(e) => setData("activity_level", e.target.value)}
                        >
                            <option value="">Select…</option>
                            <option value="low">Low</option>
                            <option value="medium">Medium</option>
                            <option value="high">High</option>
                        </select>
                        {errors.activity_level && (
                            <p className="text-sm text-red-600 mt-1">
                                {errors.activity_level}
                            </p>
                        )}
                    </div>

                    {/* Notes */}
                    <div>
                        <label className="block text-sm font-medium mb-1">Notes</label>
                        <textarea
                            className="w-full border rounded px-3 py-2"
                            value={data.notes}
                            onChange={(e) => setData("notes", e.target.value)}
                        />
                        {errors.notes && (
                            <p className="text-sm text-red-600 mt-1">{errors.notes}</p>
                        )}
                    </div>

                    <div className="pt-4">
                        <button
                            type="submit"
                            disabled={processing}
                            className="px-4 py-2 rounded bg-black text-white disabled:opacity-50"
                        >
                            {processing ? translations.submit + "..." : translations.submit}
                        </button>
                    </div>
                </form>
            </div>
        </>
    );
}
