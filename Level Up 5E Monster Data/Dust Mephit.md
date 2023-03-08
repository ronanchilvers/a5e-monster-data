---
statblock: true
name: 'Dust Mephit'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Elemental
cr: 1
ac: 12
hp: 17
hit_dice: 5d6
speed: '30 ft., fly 30 ft.'
stats:
    - 6
    - 14
    - 10
    - 8
    - 10
    - 10
damage_immunities: poison
condition_immunities: poisoned
'damage vulenrabilities': fire
skillsaves:
    - { perception: 2 }
    - { stealth: 4 }
senses: 'darkvision 60 ft., passive Perception 12'
languages: 'Auran, Terran'
traits:
    - { name: 'Death Burst', desc: 'When the mephit dies, it explodes into dust. Each creature within 5 feet makes a DC 10 Constitution saving throw. On a failure, the creature is blinded until the end of its next turn.' }
    - { name: 'False Appearance', desc: 'While motionless, the mephit is indistinguishable from a pile of dirt.' }
    - { name: 'Elemental Nature', desc: "A mephit doesn't require air, sustenance, or sleep." }
actions:
    - { name: Claws, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) slashing damage.' }
    - { name: 'Blinding Breath (1/Day)', desc: 'The mephit exhales a 15-foot cone of dust. Each creature in the area makes a DC 10 Constitution saving throw. On a failure, the creature is blinded for 1 minute. It repeats the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
    - { name: 'Sleep Sand (1/Day)', desc: 'The closest creature within 60 feet with 20 hit points or fewer falls asleep for 1 minute. It awakens early if it takes damage or a creature uses an action to shake it awake. Constructs and undead are immune to this effect.' }
combat:
    - { name: 'The mephit uses Sleep Sand and then Blinding Breath', desc: 'If outnumbered by conscious and non-blind opponents, it flees. Otherwise, it attacks with its claws.' }

---
```statblock
monster: Dust Mephit
```
