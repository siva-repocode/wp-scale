pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git credentialsId: 'token-wp', url: 'https://github.com/siva-repocode/wp-scale.git'
            }
        }

        stage('Deploy Code') {
            steps {
                publishOverSsh(
                    server: 'wp-server1',
                    transfers: [
                        sshTransfer(
                            sourceFiles: '**/*',
                            excludes: 'wp-content/uploads/**,wp-config.php',
                            removePrefix: '',
                            remoteDirectory: '/var/www/html/wordpress' // use your actual WP path
                        )
                    ],
                    execTimeout: 120000,
                    verbose: true
                )
            }
        }
    }
}
