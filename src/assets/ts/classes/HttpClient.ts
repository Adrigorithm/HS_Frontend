export class HttpClient {
    static async get<T>(url: string): Promise<T> {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`HTTP error ${response.status}!`);
        }

        return await response.json();
    }

    static async getBlob(url: string): Promise<Blob> {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`HTTP error ${response.status}!`);
        }

        return await response.blob();
    }
}