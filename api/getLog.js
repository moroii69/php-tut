export default function handler(req, res) {
    if (req.method === 'POST') {
        const logData = req.body.log;

        if (logData) {
            // You would normally process and store the log data here.
            // For example, you could store it in a database or a cloud storage service.

            // For now, just respond with a success message.
            res.status(200).json({ message: 'Log received' });
        } else {
            res.status(400).json({ message: 'No log data received' });
        }
    } else {
        res.setHeader('Allow', ['POST']);
        res.status(405).end(`Method ${req.method} Not Allowed`);
    }
}
