---
statblock: true
name: Fomorian
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Fey
cr: 8
ac: 15
hp: 138
hit_dice: '12d12 + 60'
speed: '30 ft.'
stats:
    - 20
    - 10
    - 20
    - 10
    - 14
    - 18
damage_immunities: 'psychic; damage from nonmagical, non-silvered weapons'
skillsaves:
    - { persuasion: 7 }
senses: 'darkvision 120 ft., passive Perception 12'
languages: 'Celestial, Common, Giant, Sylvan'
traits:
    - { name: 'Eye Vulnerability', desc: "A creature can target the fomorian's eye with an attack. This attack is made with disadvantage. If the attack hits and deals at least 10 damage, creatures affected by the fomorian's Charming and Mesmerizing Gaze are freed from those effects." }
    - { name: 'Immortal Nature', desc: "A titan doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The fomorian attacks twice with its warhammer.' }
    - { name: Warhammer, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 18 (3d8 + 5) bludgeoning damage.' }
'bonus actions':
    - { name: 'Charming Gaze (Gaze)', desc: "A creature within 60 feet makes a DC 15 Wisdom saving throw. On a failure, the creature is magically charmed by the fomorian. The creature repeats the saving throw every 24 hours and whenever it takes damage. On a successful saving throw or if the effect ends for it, the creature is immune to any fomorian's Charming Gaze for the next 24 hours." }
    - { name: 'Mesmerizing Gaze (Gaze, True Form Only)', desc: "A creature within 60 feet makes a DC 15 Wisdom saving throw. On a failure, the creature is magically restrained. The creature repeats the saving throw at the end of its next turn, ending the effect on itself on a success and becoming paralyzed on a failure. While the fomorian is not in line of sight, a paralyzed creature can repeat the saving throw at the end of each of its turns, ending the effect on a success. On a successful saving throw or if the effect ends for it, the creature is immune to any fomorian's Mesmerizing Gaze for 24 hours." }
    - { name: 'Immortal Form', desc: 'While in its lair, the fomorian magically changes into a specific Medium humanoid resembling a human or back to its true form. Apart from its size, its statistics are unchanged. The fomorian reverts to its true form when it dies, is incapacitated, or leaves its lair.' }
combat:
    - { name: 'The fomorian uses Mesmerizing Gaze on a new target every turn and then attacks with its warhammer, prioritizing non-paralyzed targets', desc: 'It uses Charming Gaze on creatures that have made their saving throws against Mesmerizing Gaze. Once all targets are paralyzed or charmed, the fomorian carries its prey to its lair. It flees if an attack hits its eye while it is bloodied.' }

---
```statblock
monster: Fomorian
```
