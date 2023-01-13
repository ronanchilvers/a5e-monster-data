---
statblock: true
name: 'Jackalwere - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 1
ac: 12
hp: 18
hit_dice: 4d8
speed: '40 ft.'
stats:
    - 10
    - 14
    - 10
    - 12
    - 10
    - 14
damage_resistances: 'damage from nonmagical, non-silvered weapons'
skillsaves:
    - { deception: 4 }
    - { perception: 2 }
    - { stealth: 4 }
senses: 'darkvision 60 ft., passive Perception 12'
languages: "Common (can't speak in jackal form)"
traits:
    - { name: 'Chaotic Evil', desc: 'The jackalwere radiates a Chaotic and Evil aura.' }
    - { name: 'Keen Hearing and Smell', desc: 'The jackalwere has advantage on Perception checks that rely on hearing and smell.' }
    - { name: 'Pack Tactics', desc: "The jackalwere has advantage on attack rolls against a creature if at least one of the jackalwere's allies is within 5 feet of the creature and not incapacitated." }
    - { name: 'Truth Aversion', desc: 'The jackalwere must succeed on a DC 14 Wisdom saving throw to make a true statement. On a failure, it tells an unpremeditated lie.' }
actions:
    - { name: 'Bite (Jackal or Hybrid Form Only)', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) piercing damage.' }
    - { name: 'Scimitar (Human or Hybrid Form Only)', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) slashing damage.' }
    - { name: 'Sleep Gaze (Gaze, Hybrid Form Only)', desc: "One creature within 30 feet of the jackalwere makes a DC 10 Wisdom saving throw. On a failed save, the target is magically charmed. At the beginning of the jackalwere's next turn, the target repeats the saving throw. On a success, the effect ends. On a failure, the creature falls unconscious for 10 minutes. Both the charmed and unconscious conditions end if the target takes damage or a creature within reach of the target uses an action to shake the target back to its senses. If the target successfully saves against Sleep Gaze, it is immune to Sleep Gaze for 24 hours. Undead and creatures immune to charm aren't affected by it." }
'bonus actions':
    - { name: Shapeshift, desc: 'The jackalwere magically changes its form, along with its equipment, to that of a specific Medium humanoid or a jackal-human hybrid or its true form, which is a Small jackal. While shapeshifted, its statistics are otherwise unchanged. It reverts to its true form if it dies.' }
    - { name: 'Combat The jackalwere shifts to hybrid form and uses Sleep Gaze on an unsuspecting target', desc: 'It then fights with its scimitar, staying next to at least one ally. A jackalwere is fearless when facing enemies armed with mundane weapons, but it retreats if it is outnumbered by enemies capable of bypassing its resistances.' }
combat:
    - { name: 'The jackalwere shifts to hybrid form and uses Sleep Gaze on an unsuspecting target', desc: 'It then fights with its scimitar, staying next to at least one ally. A jackalwere is fearless when facing enemies armed with mundane weapons, but it retreats if it is outnumbered by enemies capable of bypassing its resistances.' }

---
```statblock
monster: Jackalwere - A5E
```
